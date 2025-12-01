# Alle Måleenheder - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Alle Måleenheder**

## ValueSet: Alle Måleenheder (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AlleMaaleEnheder | *Version*:2.14.2 |
| Active as of 2022-08-04 | *Computable Name*:AlleMaaleEnheder |

 
Alle måleenheder 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "AlleMaaleEnheder",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AlleMaaleEnheder",
  "version" : "2.14.2",
  "name" : "AlleMaaleEnheder",
  "title" : "Alle Måleenheder",
  "status" : "active",
  "experimental" : true,
  "date" : "2022-08-04T00:00:00+02:00",
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
  "description" : "Alle måleenheder",
  "compose" : {
    "include" : [
      {
        "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MaaleEnheder",
        "concept" : [
          {
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
          }
        ]
      }
    ]
  }
}

```
