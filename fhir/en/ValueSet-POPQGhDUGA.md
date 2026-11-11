# POP-Q undersøgelse Gh (DUGA) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **POP-Q undersøgelse Gh (DUGA)**

## ValueSet: POP-Q undersøgelse Gh (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/POPQGhDUGA | *Version*:2.27.3 |
| Active as of 2024-02-13 | *Computable Name*:POPQGhDUGA |

 
Nedsynkning - POP-Q undersøgelse Gh (DUGA) 

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
  "id" : "POPQGhDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/POPQGhDUGA",
  "version" : "2.27.3",
  "name" : "POPQGhDUGA",
  "title" : "POP-Q undersøgelse Gh (DUGA)",
  "status" : "active",
  "date" : "2024-02-13T00:00:00+02:00",
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
  "description" : "Nedsynkning - POP-Q undersøgelse Gh (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/IntervalsExact",
      "concept" : [{
        "code" : "1-5",
        "display" : "1,5"
      },
      {
        "code" : "2",
        "display" : "2"
      },
      {
        "code" : "2-5",
        "display" : "2,5"
      },
      {
        "code" : "3",
        "display" : "3"
      },
      {
        "code" : "3-5",
        "display" : "3,5"
      },
      {
        "code" : "4",
        "display" : "4"
      },
      {
        "code" : "4-5",
        "display" : "4,5"
      },
      {
        "code" : "5",
        "display" : "5"
      },
      {
        "code" : "5-5",
        "display" : "5,5"
      },
      {
        "code" : "6",
        "display" : "6"
      }]
    }]
  }
}

```
