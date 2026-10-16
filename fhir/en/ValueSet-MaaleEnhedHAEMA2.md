# Måleenhed HÆMA-2 - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Måleenhed HÆMA-2**

## ValueSet: Måleenhed HÆMA-2 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MaaleEnhedHAEMA2 | *Version*:2.27.0 |
| Active as of 2022-06-28 | *Computable Name*:MaaleEnhedHAEMA2 |

 
Måleenheder HÆMA - udfaldsrum med 2 enheder 

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
  "id" : "MaaleEnhedHAEMA2",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MaaleEnhedHAEMA2",
  "version" : "2.27.0",
  "name" : "MaaleEnhedHAEMA2",
  "title" : "Måleenhed HÆMA-2",
  "status" : "active",
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "Måleenheder HÆMA - udfaldsrum med 2 enheder",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MaaleEnheder",
      "concept" : [{
        "code" : "g-l",
        "display" : "g/L - Gram per liter"
      },
      {
        "code" : "μmol-l",
        "display" : "μmol/L - Mikromol per liter"
      }]
    }]
  }
}

```
