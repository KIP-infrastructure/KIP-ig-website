# Knæ løshed gradering - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Knæ løshed gradering**

## ValueSet: Knæ løshed gradering 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KnaeLoeshedGradering | *Version*:2.27.2 |
| Active as of 2022-09-19 | *Computable Name*:KnaeLoeshedGradering |

 
Knæ løshed gradering 

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
  "id" : "KnaeLoeshedGradering",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KnaeLoeshedGradering",
  "version" : "2.27.2",
  "name" : "KnaeLoeshedGradering",
  "title" : "Knæ løshed gradering",
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
  "description" : "Knæ løshed gradering",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/KneeLoosenessGrading",
      "concept" : [{
        "code" : "grade_0",
        "display" : "Grad 0 (0-2 mm)"
      },
      {
        "code" : "grade_1",
        "display" : "Grad 1 (2-5 mm)"
      },
      {
        "code" : "grade_2",
        "display" : "Grad 2 (6-10 mm)"
      },
      {
        "code" : "grade_3",
        "display" : "Grad 3 (>10 mm)"
      }]
    }]
  }
}

```
