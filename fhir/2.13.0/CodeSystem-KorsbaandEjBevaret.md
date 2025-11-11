# Korsbånd ikke bevaret - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Korsbånd ikke bevaret**

## CodeSystem: Korsbånd ikke bevaret 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/KorsbaandEjBevaret | *Version*:2.13.0 |
| Active as of 2023-12-18 | *Computable Name*:KorsbaandEjBevaret |

 
Korsbånd ikke bevaret efter operation 

 This Code system is referenced in the content logical definition of the following value sets: 

* [KorsbaandEjBevaret](ValueSet-KorsbaandEjBevaret.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "KorsbaandEjBevaret",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/KorsbaandEjBevaret",
  "version" : "2.13.0",
  "name" : "KorsbaandEjBevaret",
  "title" : "Korsbånd ikke bevaret",
  "status" : "active",
  "date" : "2023-12-18T00:00:00+02:00",
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
  "description" : "Korsbånd ikke bevaret efter operation",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "ofret",
      "display" : "Ofret ved kirurgi",
      "definition" : "Ofret ved kirurgi"
    },
    {
      "code" : "fravaerende",
      "display" : "Fraværende",
      "definition" : "Fraværende"
    },
    {
      "code" : "beskadiget",
      "display" : "Beskadiget",
      "definition" : "Beskadiget"
    }
  ]
}

```
