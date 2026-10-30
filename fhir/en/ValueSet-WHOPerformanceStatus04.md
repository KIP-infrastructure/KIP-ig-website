# WHO Performance status grad 1-4 - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **WHO Performance status grad 1-4**

## ValueSet: WHO Performance status grad 1-4 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/WHOPerformanceStatus04 | *Version*:2.27.1 |
| Active as of 2022-11-08 | *Computable Name*:WHOPerformanceStatus04 |

 
WHO Performance status grad 1-4 

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
  "id" : "WHOPerformanceStatus04",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/WHOPerformanceStatus04",
  "version" : "2.27.1",
  "name" : "WHOPerformanceStatus04",
  "title" : "WHO Performance status grad 1-4",
  "status" : "active",
  "date" : "2022-11-08T00:00:00+02:00",
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
  "description" : "WHO Performance status grad 1-4",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/PerformanceStatusScore",
      "concept" : [{
        "code" : "grade_0",
        "display" : "Performance status 0"
      },
      {
        "code" : "grade_1",
        "display" : "Performance status 1"
      },
      {
        "code" : "grade_2",
        "display" : "Performance status 2"
      },
      {
        "code" : "grade_3",
        "display" : "Performance status 3"
      },
      {
        "code" : "grade_4",
        "display" : "Performance status 4"
      }]
    }]
  }
}

```
