# Robot (DKR) - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Robot (DKR)**

## CodeSystem: Robot (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/RobotAssistDKR | *Version*:2.16.0 |
| Active as of 2024-12-02 | *Computable Name*:RobotAssistDKR |

 
Robottyper til robot assisteret kirurgi (DKR) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [RobotDKR](ValueSet-RobotDKR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "RobotAssistDKR",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/RobotAssistDKR",
  "version" : "2.16.0",
  "name" : "RobotAssistDKR",
  "title" : "Robot (DKR)",
  "status" : "active",
  "date" : "2024-12-02T00:00:00+02:00",
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
  "description" : "Robottyper til robot assisteret kirurgi (DKR)",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "mako",
      "display" : "Mako",
      "definition" : "Mako"
    },
    {
      "code" : "rosa",
      "display" : "Rosa",
      "definition" : "Rosa"
    },
    {
      "code" : "velys",
      "display" : "Velys",
      "definition" : "Velys"
    },
    {
      "code" : "other",
      "display" : "Andet",
      "definition" : "Andet"
    }
  ]
}

```
