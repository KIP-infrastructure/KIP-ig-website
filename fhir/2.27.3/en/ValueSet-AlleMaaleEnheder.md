# Alle Måleenheder - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Alle Måleenheder**

## ValueSet: Alle Måleenheder 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AlleMaaleEnheder | *Version*:2.27.3 |
| Active as of 2022-08-04 | *Computable Name*:AlleMaaleEnheder |

 
Alle måleenheder 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "AlleMaaleEnheder",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AlleMaaleEnheder",
  "version" : "2.27.3",
  "name" : "AlleMaaleEnheder",
  "title" : "Alle Måleenheder",
  "status" : "active",
  "date" : "2022-08-04T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Alle måleenheder",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MaaleEnheder",
      "concept" : [{
        "code" : "procent",
        "display" : "% procent"
      },
      {
        "code" : "nm",
        "display" : "nm Nanometer"
      },
      {
        "code" : "μm",
        "display" : "μm Micrometer"
      },
      {
        "code" : "mm",
        "display" : "mm Millimeter"
      },
      {
        "code" : "cm",
        "display" : "cm Centimeter"
      },
      {
        "code" : "mg",
        "display" : "mg Milligram"
      },
      {
        "code" : "g",
        "display" : "g Gram"
      },
      {
        "code" : "kg",
        "display" : "kg Kilogram"
      },
      {
        "code" : "mol-l",
        "display" : "mol/l Molær koncentration per liter"
      },
      {
        "code" : "mmol-l",
        "display" : "mmol/l Millimol per liter"
      },
      {
        "code" : "μmol-l",
        "display" : "μmol/l Mikromol per liter"
      },
      {
        "code" : "nmol-l",
        "display" : "nmol/l Nanomol per liter"
      },
      {
        "code" : "u-l",
        "display" : "u/l Enhed U per liter"
      },
      {
        "code" : "kiu-l",
        "display" : "kiu/l Kilo antistof enhed per liter"
      },
      {
        "code" : "mia-L",
        "display" : "mia/L Antal milliarder per liter"
      },
      {
        "code" : "fl",
        "display" : "fl 10^-15 L"
      },
      {
        "code" : "g-l",
        "display" : "g/l Gram per liter"
      },
      {
        "code" : "arb-enh",
        "display" : "Arbejdsenheder"
      },
      {
        "code" : "g-24h",
        "display" : "g/24h Gram per døgn"
      },
      {
        "code" : "mg-l",
        "display" : "mg/l Milligram per liter"
      },
      {
        "code" : "μg-l",
        "display" : "μg/l Mikrogram per liter"
      },
      {
        "code" : "microglobulin-l",
        "display" : "Microglobulin per liter"
      },
      {
        "code" : "volfr",
        "display" : "vol.fr volumenfraktion"
      },
      {
        "code" : "mCi-kg",
        "display" : "mCi/kg milliCurie/kg"
      },
      {
        "code" : "gy",
        "display" : "gy Gray"
      },
      {
        "code" : "liter",
        "display" : "l Liter"
      },
      {
        "code" : "deciliter",
        "display" : "dl Deciliter"
      },
      {
        "code" : "centiliter",
        "display" : "cl Centiliter"
      },
      {
        "code" : "milliliter",
        "display" : "ml Milliliter"
      }]
    }]
  }
}

```
