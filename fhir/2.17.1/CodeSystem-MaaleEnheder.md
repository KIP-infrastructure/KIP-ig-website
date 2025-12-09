# Måleenheder - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Måleenheder**

## CodeSystem: Måleenheder 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MaaleEnheder | *Version*:2.17.1 |
| Active as of 2022-08-01 | *Computable Name*:MaaleEnheder |

 
Enheder til dokumentation af mængde, vægt, længde mm. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AlleMaaleEnheder](ValueSet-AlleMaaleEnheder.md)
* [MaaleEnhedHAEMA2](ValueSet-MaaleEnhedHAEMA2.md)
* [MaaleEnhedHAEMA3](ValueSet-MaaleEnhedHAEMA3.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MaaleEnheder",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MaaleEnheder",
  "version" : "2.17.1",
  "name" : "MaaleEnheder",
  "title" : "Måleenheder",
  "status" : "active",
  "date" : "2022-08-01T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Enheder til dokumentation af mængde, vægt, længde mm.",
  "content" : "complete",
  "count" : 29,
  "concept" : [
    {
      "code" : "procent",
      "display" : "%",
      "definition" : "Procent"
    },
    {
      "code" : "nm",
      "display" : "nm",
      "definition" : "Nanometer"
    },
    {
      "code" : "μm",
      "display" : "μm",
      "definition" : "Micrometer"
    },
    {
      "code" : "mm",
      "display" : "mm",
      "definition" : "Millimeter"
    },
    {
      "code" : "cm",
      "display" : "cm",
      "definition" : "Centimeter"
    },
    {
      "code" : "mg",
      "display" : "mg",
      "definition" : "Milligram"
    },
    {
      "code" : "g",
      "display" : "g",
      "definition" : "Gram"
    },
    {
      "code" : "kg",
      "display" : "kg",
      "definition" : "Kilogram"
    },
    {
      "code" : "mol-l",
      "display" : "mol-l",
      "definition" : "Molær koncentration per liter"
    },
    {
      "code" : "mmol-l",
      "display" : "mmol/L",
      "definition" : "Millimol per liter"
    },
    {
      "code" : "μmol-l",
      "display" : "μmol/L",
      "definition" : "Mikromol per liter"
    },
    {
      "code" : "nmol-l",
      "display" : "nmol/L",
      "definition" : "Nanomol per liter"
    },
    {
      "code" : "u-l",
      "display" : "U/L",
      "definition" : "Enhed U per liter"
    },
    {
      "code" : "kiu-l",
      "display" : "kiU/L",
      "definition" : "Kilo antistof enhed per liter"
    },
    {
      "code" : "mia-L",
      "display" : "mia/L",
      "definition" : "Antal milliarder per liter"
    },
    {
      "code" : "fl",
      "display" : "fl",
      "definition" : "10^-15 L"
    },
    {
      "code" : "g-l",
      "display" : "g/L",
      "definition" : "Gram per liter"
    },
    {
      "code" : "arb-enh",
      "display" : "arb.enh",
      "definition" : "Arbejdsenheder"
    },
    {
      "code" : "g-24h",
      "display" : "g/24h",
      "definition" : "Gram per døgn"
    },
    {
      "code" : "mg-l",
      "display" : "mg/L",
      "definition" : "Milligram per liter"
    },
    {
      "code" : "microglobulin-l",
      "display" : "microglobulin/L",
      "definition" : "Microglobulin per liter"
    },
    {
      "code" : "volfr",
      "display" : "vol.fr",
      "definition" : "volumenfraktion"
    },
    {
      "code" : "μg-l",
      "display" : "μg/L",
      "definition" : "Mikrogram per liter"
    },
    {
      "code" : "mCi-kg",
      "display" : "mCi/kg",
      "definition" : "milliCurie/kg"
    },
    {
      "code" : "gy",
      "display" : "Gy",
      "definition" : "Gray"
    },
    {
      "code" : "liter",
      "display" : "l",
      "definition" : "Liter"
    },
    {
      "code" : "deciliter",
      "display" : "dl",
      "definition" : "Deciliter"
    },
    {
      "code" : "centiliter",
      "display" : "cl",
      "definition" : "Centiliter"
    },
    {
      "code" : "milliliter",
      "display" : "ml",
      "definition" : "Milliliter"
    }
  ]
}

```
