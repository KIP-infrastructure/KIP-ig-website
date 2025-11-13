# WFNS grading system - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **WFNS grading system**

## CodeSystem: WFNS grading system 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/WFNSGradingSystem | *Version*:2.14.0 |
| Active as of 2022-06-28 | *Computable Name*:WFNSGradingSystem |

 
World Federation of Neurosurgical Societies (WFNS) grading system; Link: https://radiopaedia.org/articles/wfns-grading-system 

 This Code system is referenced in the content logical definition of the following value sets: 

* [WFNSGradering](ValueSet-WFNSGradering.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "WFNSGradingSystem",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/WFNSGradingSystem",
  "version" : "2.14.0",
  "name" : "WFNSGradingSystem",
  "title" : "WFNS grading system",
  "status" : "active",
  "date" : "2022-06-28T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "World Federation of Neurosurgical Societies (WFNS) grading system; Link: https://radiopaedia.org/articles/wfns-grading-system",
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "grade1",
      "display" : "GCS 15",
      "definition" : "GCS 15, no motor deficit"
    },
    {
      "code" : "grade2",
      "display" : "GCS 13-14",
      "definition" : "GCS 13-14 without deficit"
    },
    {
      "code" : "grade3",
      "display" : "GCS 13-14",
      "definition" : "GCS 13-14 with focal neurological deficit"
    },
    {
      "code" : "grade4",
      "display" : "GCS 7-12",
      "definition" : "GCS 7-12, with or without deficit"
    },
    {
      "code" : "grade5",
      "display" : "GCS <7",
      "definition" : "GCS <7 , with or without deficit"
    }
  ]
}

```
