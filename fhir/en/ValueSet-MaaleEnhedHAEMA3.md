# Måleenhed HÆMA-3 - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Måleenhed HÆMA-3**

## ValueSet: Måleenhed HÆMA-3 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MaaleEnhedHAEMA3 | *Version*:2.27.3 |
| Active as of 2022-06-28 | *Computable Name*:MaaleEnhedHAEMA3 |

 
Måleenheder HÆMA - udfaldsrum med 3 enheder 

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
  "id" : "MaaleEnhedHAEMA3",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MaaleEnhedHAEMA3",
  "version" : "2.27.3",
  "name" : "MaaleEnhedHAEMA3",
  "title" : "Måleenhed HÆMA-3",
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
  "description" : "Måleenheder HÆMA - udfaldsrum med 3 enheder",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MaaleEnheder",
      "concept" : [{
        "code" : "g-l",
        "display" : "g/L - Gram per liter"
      },
      {
        "code" : "g-24h",
        "display" : "g/24h - Gram per døgn"
      }]
    }]
  }
}

```
