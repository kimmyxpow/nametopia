import { generate } from "random-words";
import SexSelect from "./components/sex-select";
import CountrySelect from "./components/country-select";
import { useState } from "react";
import { toast } from "react-toastify";
import { countryStore } from "./stores/country-store";
import { sexStore } from "./stores/sex-store";
import { Faker, allFakers } from "@faker-js/faker";

const findKeyByValue = (obj: any, targetValue: string) => {
    return Object.keys(obj).find((key) => obj[key] === targetValue)!;
};

function App() {
    const { country, keys } = countryStore();
    const { sex } = sexStore();
    const [name, setName] = useState("Abi Noval Fauzi");

    const onCopy = async () => {
        await navigator.clipboard.writeText(name);
        toast.success(`Copied to clipboard!`);
    };

    const onGenerate = () => {
        const faker: Faker =
            allFakers[findKeyByValue(keys, country) as keyof typeof allFakers];
        setName(faker.person.fullName({ sex }));
    };

    return (
        <div className="max-h-dvh h-dvh overflow-hidden bg-black relative grid place-items-center p-6">
            <div className="absolute bg-black max-w-xl p-2 w-full rounded-xl">
                <div className="bg-white p-8 rounded-lg">
                    <h1 className="font-black text-2xl text-zinc-800 mb-2">
                        NAMETOPIA
                    </h1>
                    <p className="text-zinc-600">
                        No need to fuss! With just one click on Nametopia,
                        discover the perfect name inspiration for any purpose.
                    </p>
                    <div className="mt-4">
                        <div className="grid grid-cols-2 gap-4">
                            <SexSelect />
                            <CountrySelect />
                            <div className="col-span-2 flex gap-1">
                                <div className="py-3 px-6 text-center bg-black text-white font-bold rounded-lg w-full">
                                    {name}
                                </div>
                                <button
                                    onClick={onGenerate}
                                    className="size-12 rounded-lg grid place-items-center shrink-0 bg-zinc-200 hover:bg-black hover:text-white"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="1.2em"
                                        height="1.2em"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            fill="currentColor"
                                            d="M6.545 8.163a.75.75 0 0 1-.487-1.044l1.66-3.535a.75.75 0 0 1 1.36.002l.732 1.569a.755.755 0 0 1 .08-.027a8.15 8.15 0 1 1-5.8 5.903a.75.75 0 1 1 1.456.364a6.65 6.65 0 1 0 4.907-4.862l.74 1.583a.75.75 0 0 1-.872 1.043z"
                                        />
                                    </svg>
                                    <span className="sr-only">Regenerage</span>
                                </button>
                                <button
                                    onClick={onCopy}
                                    className="size-12 rounded-lg grid place-items-center shrink-0 bg-zinc-200 hover:bg-black hover:text-white"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="1.2em"
                                        height="1.2em"
                                        viewBox="0 0 512 512"
                                    >
                                        <rect
                                            width="336"
                                            height="336"
                                            x="128"
                                            y="128"
                                            fill="none"
                                            stroke="currentColor"
                                            strokeLinejoin="round"
                                            strokeWidth="32"
                                            rx="57"
                                            ry="57"
                                        />
                                        <path
                                            fill="none"
                                            stroke="currentColor"
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                            strokeWidth="32"
                                            d="m383.5 128l.5-24a56.16 56.16 0 0 0-56-56H112a64.19 64.19 0 0 0-64 64v216a56.16 56.16 0 0 0 56 56h24"
                                        />
                                    </svg>
                                    <span className="sr-only">Copy</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p className="text-justify break-all overflow-hidden h-full">
                {Array.from({ length: 50 }).map((_, index) => (
                    <span
                        className="odd:text-zinc-400 even:text-zinc-200 text-8xl font-black"
                        key={index}
                    >
                        {generate()}{" "}
                    </span>
                ))}
            </p>
        </div>
    );
}

export default App;
