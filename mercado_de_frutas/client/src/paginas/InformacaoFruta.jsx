import React from "react";
import { useSearchParams } from "react-router-dom";

export default function InformacaoFruta() {
  const [fruta] = useSearchParams();
  console.log(fruta);
  return <div>InformacaoFruta id da fruta = {fruta.get("fruta")}</div>;
}
