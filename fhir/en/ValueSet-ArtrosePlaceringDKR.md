# Artrose Placering (DKR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Artrose Placering (DKR)**

## ValueSet: Artrose Placering (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ArtrosePlaceringDKR | *Version*:2.27.1 |
| Active as of 2023-12-19 | *Computable Name*:ArtrosePlaceringDKR |

 
Artrose Placering (DKR) 

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
  "id" : "ArtrosePlaceringDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ArtrosePlaceringDKR",
  "version" : "2.27.1",
  "name" : "ArtrosePlaceringDKR",
  "title" : "Artrose Placering (DKR)",
  "status" : "active",
  "date" : "2023-12-19T00:00:00+02:00",
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
  "description" : "Artrose Placering (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ArtrosePlacering",
      "concept" : [{
        "code" : "hmedial",
        "display" : "Medial artrose"
      },
      {
        "code" : "lateral",
        "display" : "Lateral artrose"
      },
      {
        "code" : "patellofemoral",
        "display" : "Patellofemoral artrose"
      },
      {
        "code" : "2kammer",
        "display" : "2-kammer artrose"
      },
      {
        "code" : "3kammer",
        "display" : "3-kammer artrose"
      }]
    }]
  }
}

```
