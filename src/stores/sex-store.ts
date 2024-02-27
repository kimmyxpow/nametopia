import { create } from "zustand";

type Sex = "male" | "female";

type SexState = {
    sex: Sex;
    list: string[];
    setSex: (sex: Sex) => void;
};

export const sexStore = create<SexState>((set) => ({
    sex: "male",
    list: ["male", "female"],
    setSex: (sex: Sex) => set({ sex }),
}));
