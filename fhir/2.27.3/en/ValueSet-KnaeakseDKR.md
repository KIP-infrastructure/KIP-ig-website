# Knæakse (DKR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Knæakse (DKR)**

## ValueSet: Knæakse (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KnaeakseDKR | *Version*:2.27.3 |
| Active as of 2022-10-12 | *Computable Name*:KnaeakseDKR |

 
Knæakse (DKR) 

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
  "id" : "KnaeakseDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KnaeakseDKR",
  "version" : "2.27.3",
  "name" : "KnaeakseDKR",
  "title" : "Knæakse (DKR)",
  "status" : "active",
  "date" : "2022-10-12T00:00:00+02:00",
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
  "description" : "Knæakse (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Intervals",
      "concept" : [{
        "code" : "<0",
        "display" : "<0 grader (varus)"
      },
      {
        "code" : "0-4",
        "display" : "0-4 grader"
      },
      {
        "code" : "5-10",
        "display" : "5-10 grader (normal)"
      },
      {
        "code" : "11-15",
        "display" : "11-15 grader"
      },
      {
        "code" : ">15",
        "display" : ">15 grader (valgus)"
      }]
    }]
  }
}

```
