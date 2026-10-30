# ML-instabilitet (DKR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ML-instabilitet (DKR)**

## ValueSet: ML-instabilitet (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MLInstabilitetDKR | *Version*:2.27.1 |
| Active as of 2022-10-12 | *Computable Name*:MLInstabilitetDKR |

 
ML-instabilitet (DKR) 

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
  "id" : "MLInstabilitetDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MLInstabilitetDKR",
  "version" : "2.27.1",
  "name" : "MLInstabilitetDKR",
  "title" : "ML-instabilitet (DKR)",
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
  "description" : "ML-instabilitet (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Intervals",
      "concept" : [{
        "code" : "<5",
        "display" : "<5 grader"
      },
      {
        "code" : "5-9",
        "display" : "5-9 grader"
      },
      {
        "code" : "10-14",
        "display" : "10-14 grader"
      },
      {
        "code" : ">14",
        "display" : ">14 grader"
      }]
    }]
  }
}

```
