import { Combobox } from "@headlessui/react";
import { useState } from "react";
import { countryStore } from "../stores/country-store";

const CountrySelect = () => {
    const { country, setCountry, list } = countryStore();
    const [query, setQuery] = useState("");

    const filteredCountry =
        query === ""
            ? list
            : list.filter((s) => s.toLowerCase().includes(query.toLowerCase()));

    return (
        <Combobox
            value={country}
            onChange={setCountry}
            as="div"
            className="relative space-y-1"
        >
            <Combobox.Label className="text-zinc-800 font-bold">
                Select Country
            </Combobox.Label>
            <div className="border focus-within:border-black py-3 px-6 flex items-center justify-between border-zinc-400 text-zinc-600 rounded-lg">
                <Combobox.Input
                    className="w-full focus:outline-none"
                    onChange={(event) => setQuery(event.target.value)}
                />
                <Combobox.Button>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="1.2em"
                        height="1.2em"
                        viewBox="0 0 16 16"
                        className="shrink-0"
                    >
                        <path
                            fill="currentColor"
                            fillRule="evenodd"
                            d="M2.97 5.47a.75.75 0 0 1 1.06 0L8 9.44l3.97-3.97a.75.75 0 1 1 1.06 1.06l-4.5 4.5a.75.75 0 0 1-1.06 0l-4.5-4.5a.75.75 0 0 1 0-1.06"
                            clipRule="evenodd"
                        />
                    </svg>
                </Combobox.Button>
            </div>
            <Combobox.Options className="absolute bottom-0 translate-y-full rounded w-full border bg-white shadow max-h-52 overflow-y-auto">
                {filteredCountry.map((s) => (
                    <Combobox.Option
                        className={({ active }) =>
                            `px-6 py-3 ${active ? "bg-zinc-100" : ""}`
                        }
                        key={s}
                        value={s}
                    >
                        {s}
                    </Combobox.Option>
                ))}
            </Combobox.Options>
        </Combobox>
    );
};

export default CountrySelect;
