# Slynge (DUGA) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Slynge (DUGA)**

## ValueSet: Slynge (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SlyngeDUGA | *Version*:2.27.3 |
| Active as of 2024-02-14 | *Computable Name*:SlyngeDUGA |

 
Slynge (DUGA) 

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
  "id" : "SlyngeDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SlyngeDUGA",
  "version" : "2.27.3",
  "name" : "SlyngeDUGA",
  "title" : "Slynge (DUGA)",
  "status" : "active",
  "date" : "2024-02-14T00:00:00+02:00",
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
  "description" : "Slynge (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SlyngeDUGA",
      "concept" : [{
        "code" : "Bard",
        "display" : "Bard"
      },
      {
        "code" : "BostonScientific",
        "display" : "Boston Scientific"
      },
      {
        "code" : "Cousin",
        "display" : "Cousin"
      },
      {
        "code" : "johnson&johnson",
        "display" : "Johnson & Johnson"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden"
      }]
    }]
  }
}

```
