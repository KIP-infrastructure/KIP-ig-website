# Vedligeholdelsesbehandling - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Vedligeholdelsesbehandling**

## ValueSet: Vedligeholdelsesbehandling 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/TreatmentPreservation | *Version*:2.27.3 |
| Active as of 2022-12-07 | *Computable Name*:TreatmentPreservation |

 
Hvilken vedligeholdelsesbehandling er der påbegyndt 

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
  "id" : "TreatmentPreservation",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/TreatmentPreservation",
  "version" : "2.27.3",
  "name" : "TreatmentPreservation",
  "title" : "Vedligeholdelsesbehandling",
  "status" : "active",
  "date" : "2022-12-07T00:00:00+02:00",
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
  "description" : "Hvilken vedligeholdelsesbehandling er der påbegyndt",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
      "concept" : [{
        "code" : "L04AX04",
        "display" : "Lenalidomid"
      },
      {
        "code" : "L04AX06",
        "display" : "Pomalidomid"
      },
      {
        "code" : "L04AX02",
        "display" : "Thalidomid"
      },
      {
        "code" : "L01XG01",
        "display" : "Bortezomib"
      },
      {
        "code" : "L01XG02",
        "display" : "Carfilzomib"
      },
      {
        "code" : "H02",
        "display" : "Steroid (mono)"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
