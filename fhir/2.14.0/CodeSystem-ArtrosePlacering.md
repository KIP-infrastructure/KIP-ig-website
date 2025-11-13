# Placering af indikationsgivne artrose - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Placering af indikationsgivne artrose**

## CodeSystem: Placering af indikationsgivne artrose 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ArtrosePlacering | *Version*:2.14.0 |
| Active as of 2023-12-19 | *Computable Name*:ArtrosePlacering |

 
Placering af indikationsgivne artrose 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ArtrosePlaceringDKR](ValueSet-ArtrosePlaceringDKR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ArtrosePlacering",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ArtrosePlacering",
  "version" : "2.14.0",
  "name" : "ArtrosePlacering",
  "title" : "Placering af indikationsgivne artrose",
  "status" : "active",
  "date" : "2023-12-19T00:00:00+02:00",
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
  "description" : "Placering af indikationsgivne artrose",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "hmedial",
      "display" : "Medial artrose",
      "definition" : "Medial artrose"
    },
    {
      "code" : "lateral",
      "display" : "Lateral artrose",
      "definition" : "Lateral artrose"
    },
    {
      "code" : "patellofemoral",
      "display" : "Patellofemoral artrose",
      "definition" : "Patellofemoral artrose"
    },
    {
      "code" : "2kammer",
      "display" : "2-kammer artrose",
      "definition" : "2-kammer artrose"
    },
    {
      "code" : "3kammer",
      "display" : "3-kammer artrose",
      "definition" : "3-kammer artrose"
    }
  ]
}

```
