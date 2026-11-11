# Knæ løshed (posterolateral) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Knæ løshed (posterolateral)**

## ValueSet: Knæ løshed (posterolateral) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KnaeLoeshedPosterolateral | *Version*:2.27.3 |
| Active as of 2022-09-19 | *Computable Name*:KnaeLoeshedPosterolateral |

 
Knæ løshed (posterolateral) 

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
  "id" : "KnaeLoeshedPosterolateral",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KnaeLoeshedPosterolateral",
  "version" : "2.27.3",
  "name" : "KnaeLoeshedPosterolateral",
  "title" : "Knæ løshed (posterolateral)",
  "status" : "active",
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Knæ løshed (posterolateral)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/KneeLoosenessGrading",
      "concept" : [{
        "code" : "0-5",
        "display" : "0-5 grader"
      },
      {
        "code" : "6-10",
        "display" : "6-10 grader"
      },
      {
        "code" : "11-19",
        "display" : "11-19 grader"
      },
      {
        "code" : ">20",
        "display" : ">20 grader"
      }]
    }]
  }
}

```
