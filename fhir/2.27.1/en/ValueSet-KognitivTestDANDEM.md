# Kognitiv test (DANDEM) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kognitiv test (DANDEM)**

## ValueSet: Kognitiv test (DANDEM) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KognitivTestDANDEM | *Version*:2.27.1 |
| Active as of 2025-05-09 | *Computable Name*:KognitivTestDANDEM |

 
Kognitiv test (DANDEM) 

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
  "id" : "KognitivTestDANDEM",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KognitivTestDANDEM",
  "version" : "2.27.1",
  "name" : "KognitivTestDANDEM",
  "title" : "Kognitiv test (DANDEM)",
  "status" : "active",
  "date" : "2025-05-09T00:00:00+02:00",
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
  "description" : "Kognitiv test (DANDEM)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/CognitiveTest",
      "concept" : [{
        "code" : "mmse",
        "display" : "MMSE"
      },
      {
        "code" : "ace",
        "display" : "ACE"
      },
      {
        "code" : "basic",
        "display" : "BASIC"
      },
      {
        "code" : "camcog",
        "display" : "CAMcog"
      },
      {
        "code" : "moca",
        "display" : "MoCa"
      },
      {
        "code" : "rudas",
        "display" : "RUDAS"
      },
      {
        "code" : "MCE",
        "display" : "MCE"
      }]
    }]
  }
}

```
