# Operativ adgang (DKR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operativ adgang (DKR)**

## ValueSet: Operativ adgang (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperativAdgangDKR | *Version*:2.27.0 |
| Active as of 2022-10-14 | *Computable Name*:OperativAdgangDKR |

 
Operativ adgang (DKR) 

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
  "id" : "OperativAdgangDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperativAdgangDKR",
  "version" : "2.27.0",
  "name" : "OperativAdgangDKR",
  "title" : "Operativ adgang (DKR)",
  "status" : "active",
  "date" : "2022-10-14T00:00:00+02:00",
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
  "description" : "Operativ adgang (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/IncisionChoice",
      "concept" : [{
        "code" : "medial_for_patella",
        "display" : "Medial for patella"
      },
      {
        "code" : "lateral_for_patella",
        "display" : "Lateral for patella"
      }]
    }]
  }
}

```
