# Korsbånd ikke bevaret - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Korsbånd ikke bevaret**

## ValueSet: Korsbånd ikke bevaret 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KorsbaandEjBevaret | *Version*:2.27.3 |
| Active as of 2023-12-18 | *Computable Name*:KorsbaandEjBevaret |

 
Korsbånd ikke bevaret efter operation 

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
  "id" : "KorsbaandEjBevaret",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KorsbaandEjBevaret",
  "version" : "2.27.3",
  "name" : "KorsbaandEjBevaret",
  "title" : "Korsbånd ikke bevaret",
  "status" : "active",
  "date" : "2023-12-18T00:00:00+02:00",
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
  "description" : "Korsbånd ikke bevaret efter operation",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/KorsbaandEjBevaret",
      "concept" : [{
        "code" : "ofret",
        "display" : "Ofret ved kirurgi"
      },
      {
        "code" : "fravaerende",
        "display" : "Fraværende"
      },
      {
        "code" : "beskadiget",
        "display" : "Beskadiget"
      }]
    }]
  }
}

```
