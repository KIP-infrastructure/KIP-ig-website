# Operating room, attributes - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operating room, attributes**

## CodeSystem: Operating room, attributes 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/OperatingRoom | *Version*:2.17.1 |
| Active as of 2022-07-06 | *Computable Name*:OperatingRoom |

 
Operating room, attributes 

 This Code system is referenced in the content logical definition of the following value sets: 

* [OperationsstueDKR](ValueSet-OperationsstueDKR.md)
* [OperationsstueFlowKonventionel](ValueSet-OperationsstueFlowKonventionel.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "OperatingRoom",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/OperatingRoom",
  "version" : "2.17.1",
  "name" : "OperatingRoom",
  "title" : "Operating room, attributes",
  "status" : "active",
  "date" : "2022-07-06T00:00:00+02:00",
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
  "description" : "Operating room, attributes",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "flow",
      "display" : "Flow stue/green house",
      "definition" : "Flow stue/green house"
    },
    {
      "code" : "conventional",
      "display" : "Konventionel stue",
      "definition" : "Konventionel stue"
    },
    {
      "code" : "turbulent_air",
      "display" : "Turbulent Air Flow",
      "definition" : "Turbulent Air stue"
    }
  ]
}

```
