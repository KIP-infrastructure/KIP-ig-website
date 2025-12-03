# Assist devices - KIP Infrastructure v2.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Assist devices**

## CodeSystem: Assist devices 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AssistDevices | *Version*:2.15.0 |
| Active as of 2022-06-29 | *Computable Name*:AssistDevices |

 
Assist devices 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AssistDevicesBallonStent](ValueSet-AssistDevicesBallonStent.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AssistDevices",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AssistDevices",
  "version" : "2.15.0",
  "name" : "AssistDevices",
  "title" : "Assist devices",
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
  "description" : "Assist devices",
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "balloon",
      "display" : "Balloon",
      "definition" : "Intra-aortic balloon"
    },
    {
      "code" : "stent",
      "display" : "Stent",
      "definition" : "Stent"
    }
  ]
}

```
