# Action upon discovery of ICH - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Action upon discovery of ICH**

## CodeSystem: Action upon discovery of ICH 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ICHAction | *Version*:2.21.0 |
| Active as of 2022-06-28 | *Computable Name*:ICHAction |

 
Action upon discovery of ICH (Intracerebral haematoma) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ICHEvakuering](ValueSet-ICHEvakuering.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ICHAction",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ICHAction",
  "version" : "2.21.0",
  "name" : "ICHAction",
  "title" : "Action upon discovery of ICH",
  "status" : "active",
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "Action upon discovery of ICH (Intracerebral haematoma)",
  "content" : "complete",
  "count" : 2,
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
    "code" : "evacution",
    "display" : "Evacuation required",
    "definition" : "Evacuation required"
  },
  {
    "code" : "noevacuation",
    "display" : "Evacutation is not required",
    "definition" : "Evacuation is not required"
  }]
}

```
