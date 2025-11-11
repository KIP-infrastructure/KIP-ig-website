# Risk assessment - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Risk assessment**

## CodeSystem: Risk assessment 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/RiskAssessment | *Version*:2.13.0 |
| Active as of 2022-07-11 | *Computable Name*:RiskAssessment |

 
Risk assessment 

 This Code system is referenced in the content logical definition of the following value sets: 

* [RisikovurderingRETSPSYK](ValueSet-RisikovurderingRETSPSYK.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "RiskAssessment",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/RiskAssessment",
  "version" : "2.13.0",
  "name" : "RiskAssessment",
  "title" : "Risk assessment",
  "status" : "active",
  "date" : "2022-07-11T00:00:00+02:00",
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
  "description" : "Risk assessment",
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "hcr-20",
      "display" : "HCR-20",
      "definition" : "HCR-20"
    },
    {
      "code" : "start",
      "display" : "START",
      "definition" : "START"
    },
    {
      "code" : "saprof",
      "display" : "SAPROF",
      "definition" : "SAPROF"
    },
    {
      "code" : "rsvp",
      "display" : "RSVP",
      "definition" : "RSVP"
    },
    {
      "code" : "v-risk-10",
      "display" : "V-RISK-10",
      "definition" : "V-RISK-10"
    }
  ]
}

```
