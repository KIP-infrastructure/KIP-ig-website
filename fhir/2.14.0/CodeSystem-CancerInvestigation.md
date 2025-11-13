# Cancer investigation - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cancer investigation**

## CodeSystem: Cancer investigation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/CancerInvestigation | *Version*:2.14.0 |
| Active as of 2022-05-31 | *Computable Name*:CancerInvestigation |

 
Udredning for cancerpatienter for cancerpatienter. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CancerUdredning](ValueSet-CancerUdredning.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "CancerInvestigation",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/CancerInvestigation",
  "version" : "2.14.0",
  "name" : "CancerInvestigation",
  "title" : "Cancer investigation",
  "status" : "active",
  "date" : "2022-05-31T00:00:00+02:00",
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
  "description" : "Udredning for cancerpatienter for cancerpatienter.",
  "content" : "complete",
  "count" : 10,
  "concept" : [
    {
      "code" : "eus",
      "display" : "EUS",
      "definition" : "EUS"
    },
    {
      "code" : "lap/lus",
      "display" : "Lap/LUS",
      "definition" : "Lap/LUS"
    },
    {
      "code" : "ct",
      "display" : "CT",
      "definition" : "CT"
    },
    {
      "code" : "pet/ct",
      "display" : "PET/CT",
      "definition" : "PET/CT"
    },
    {
      "code" : "mr",
      "display" : "MR",
      "definition" : "MR"
    },
    {
      "code" : "us",
      "display" : "UL",
      "definition" : "UL",
      "concept" : [
        {
          "code" : "abdomen",
          "display" : "UL abdomen",
          "definition" : "UL abdomen"
        },
        {
          "code" : "neck",
          "display" : "UL hals",
          "definition" : "UL hals"
        }
      ]
    },
    {
      "code" : "ebus",
      "display" : "EBUS",
      "definition" : "EBUS"
    },
    {
      "code" : "other",
      "display" : "Øvrige",
      "definition" : "Øvrige"
    }
  ]
}

```
