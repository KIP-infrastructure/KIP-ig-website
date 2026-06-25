# Robot (DKR) - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Robot (DKR)**

## CodeSystem: Robot (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/RobotAssistDKR | *Version*:2.23.0 |
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
  "version" : "2.23.0",
  "name" : "RobotAssistDKR",
  "title" : "Robot (DKR)",
  "status" : "active",
  "date" : "2024-12-02T00:00:00+02:00",
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
  "description" : "Robottyper til robot assisteret kirurgi (DKR)",
  "content" : "complete",
  "count" : 4,
  "property" : [{
    "code" : "comment",
    "uri" : "http://hl7.org/fhir/concept-properties#comment",
    "description" : "A string that provides additional detail pertinent to the use or understanding of the concept",
    "type" : "string"
  },
  {
    "code" : "effectiveDate",
    "uri" : "http://hl7.org/fhir/concept-properties#effectiveDate",
    "description" : "The date at which the concept status was last changed",
    "type" : "dateTime"
  },
  {
    "code" : "status",
    "uri" : "http://hl7.org/fhir/concept-properties#status",
    "description" : "A code that indicates the status of the concept. Typical values are active, experimental, deprecated, and retired",
    "type" : "code"
  },
  {
    "code" : "inactive",
    "uri" : "http://hl7.org/fhir/concept-properties#inactive",
    "description" : "True if the concept is not considered active - e.g. not a valid concept any more. Property type is boolean, default value is false. Note that the status property may also be used to indicate that a concept is inactive",
    "type" : "boolean"
  }],
  "concept" : [{
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
  }]
}

```
