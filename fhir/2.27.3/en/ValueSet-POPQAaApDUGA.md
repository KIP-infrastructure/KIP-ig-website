# POP-Q undersøgelse Aa+Ap (DUGA) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **POP-Q undersøgelse Aa+Ap (DUGA)**

## ValueSet: POP-Q undersøgelse Aa+Ap (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/POPQAaApDUGA | *Version*:2.27.3 |
| Active as of 2024-02-13 | *Computable Name*:POPQAaApDUGA |

 
Nedsynkning - POP-Q undersøgelse Aa+Ap (DUGA) 

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
  "id" : "POPQAaApDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/POPQAaApDUGA",
  "version" : "2.27.3",
  "name" : "POPQAaApDUGA",
  "title" : "POP-Q undersøgelse Aa+Ap (DUGA)",
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
  "description" : "Nedsynkning - POP-Q undersøgelse Aa+Ap (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/IntervalsExact",
      "concept" : [{
        "code" : "m3",
        "display" : "-3"
      },
      {
        "code" : "m2-5",
        "display" : "-2,5"
      },
      {
        "code" : "m2",
        "display" : "-2"
      },
      {
        "code" : "m1-5",
        "display" : "-1,5"
      },
      {
        "code" : "m1",
        "display" : "-1"
      },
      {
        "code" : "m0-5",
        "display" : "-0,5"
      },
      {
        "code" : "0",
        "display" : "0"
      },
      {
        "code" : "0-5",
        "display" : "0,5"
      },
      {
        "code" : "1",
        "display" : "1"
      },
      {
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
      }]
    }]
  }
}

```
