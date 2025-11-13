# Procedure duration: Codes for different durations - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Procedure duration: Codes for different durations**

## CodeSystem: Procedure duration: Codes for different durations 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ProcedureDuration | *Version*:2.14.0 |
| Active as of 2022-06-29 | *Computable Name*:ProcedureDuration |

 
Procedure duration: Codes for different durations 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BehandlingsVarighedDHR](ValueSet-BehandlingsVarighedDHR.md)
* [ProcedureVarighed15min](ValueSet-ProcedureVarighed15min.md)
* [ProcedureVarighed5min](ValueSet-ProcedureVarighed5min.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ProcedureDuration",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureDuration",
  "version" : "2.14.0",
  "name" : "ProcedureDuration",
  "title" : "Procedure duration: Codes for different durations",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Procedure duration: Codes for different durations",
  "content" : "complete",
  "count" : 8,
  "concept" : [
    {
      "code" : "=<1",
      "display" : "=<1",
      "definition" : "=<1"
    },
    {
      "code" : ">1",
      "display" : ">1",
      "definition" : ">1"
    },
    {
      "code" : "=<2",
      "display" : "=<2",
      "definition" : "=<2"
    },
    {
      "code" : ">2",
      "display" : ">2",
      "definition" : ">2"
    },
    {
      "code" : "=<5",
      "display" : "=<5",
      "definition" : "=<5"
    },
    {
      "code" : ">5",
      "display" : ">5",
      "definition" : ">5"
    },
    {
      "code" : "=<15",
      "display" : "=<15",
      "definition" : "=<15"
    },
    {
      "code" : ">15",
      "display" : ">15",
      "definition" : ">15"
    }
  ]
}

```
