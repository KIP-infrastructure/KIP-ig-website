# The National Institute of Health Stroke Scale (NIHSS) - 6. Motor Leg - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **The National Institute of Health Stroke Scale (NIHSS) - 6. Motor Leg**

## CodeSystem: The National Institute of Health Stroke Scale (NIHSS) - 6. Motor Leg 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/NIHSS6MotorLeg | *Version*:2.21.0 |
| Active as of 2022-06-23 | *Computable Name*:NIHSS6MotorLeg |

 
The National Institute of Health Stroke Scale (NIHSS) - 6. Motor Leg; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information 

 This Code system is referenced in the content logical definition of the following value sets: 

* [NIHSS6FunktionBen](ValueSet-NIHSS6FunktionBen.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "NIHSS6MotorLeg",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS6MotorLeg",
  "version" : "2.21.0",
  "name" : "NIHSS6MotorLeg",
  "title" : "The National Institute of Health Stroke Scale (NIHSS) - 6. Motor Leg",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 6. Motor Leg; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
  "content" : "complete",
  "count" : 8,
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
    "code" : "0",
    "display" : "0",
    "definition" : "No drift; leg holds 30-degree position for full 5 seconds."
  },
  {
    "code" : "1",
    "display" : "1",
    "definition" : "Drift; leg falls by the end of the 5-second period but does not hit bed."
  },
  {
    "code" : "2",
    "display" : "2",
    "definition" : "Some effort against gravity; leg falls to bed by 5 seconds, but has some effort against gravity."
  },
  {
    "code" : "3",
    "display" : "3",
    "definition" : "No effort against gravity; leg falls to bed immediately."
  },
  {
    "code" : "4",
    "display" : "4",
    "definition" : "No movement."
  },
  {
    "code" : "5a",
    "display" : "5a",
    "definition" : "Left Leg"
  },
  {
    "code" : "5b",
    "display" : "5b",
    "definition" : "Right Leg"
  },
  {
    "code" : "UN",
    "display" : "UN",
    "definition" : "Amputation or joint fusion, explain:"
  }]
}

```
