# Detection methods - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Detection methods**

## CodeSystem: Detection methods 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/DetectionMethods | *Version*:2.23.1 |
| Active as of 2022-06-29 | *Computable Name*:DetectionMethods |

 
Detection methods (vasospasms etc.) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DetectionMethodCR](ValueSet-DetectionMethodCR.md)
* [Splenomegali](ValueSet-Splenomegali.md)
* [VasospasmerPaavisning](ValueSet-VasospasmerPaavisning.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "DetectionMethods",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/DetectionMethods",
  "version" : "2.23.1",
  "name" : "DetectionMethods",
  "title" : "Detection methods",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Detection methods (vasospasms etc.)",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 5,
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
    "code" : "doppler",
    "display" : "Doppler",
    "definition" : "Transcraniel doppler"
  },
  {
    "code" : "clinical",
    "display" : "Klinisk",
    "definition" : "Kliniske"
  },
  {
    "code" : "radiological",
    "display" : "Radiologisk",
    "definition" : "Radiologisk bekræftet"
  },
  {
    "code" : "splenomegaly_clinical",
    "display" : "Splenomegali, klinisk bedømt",
    "definition" : "Splenomegali, klinisk bedømt"
  },
  {
    "code" : "splenomegaly_radiological",
    "display" : "Splenomegali, radiologisk påvist",
    "definition" : "Splenomegali, radiologisk påvist"
  }]
}

```
