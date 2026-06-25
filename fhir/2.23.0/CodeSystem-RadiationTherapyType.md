# Radiation therapy type - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Radiation therapy type**

## CodeSystem: Radiation therapy type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/RadiationTherapyType | *Version*:2.23.0 |
| Active as of 2022-07-15 | *Computable Name*:RadiationTherapyType |

 
Radiation therapy type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [StraaleterapiLYFO](ValueSet-StraaleterapiLYFO.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "RadiationTherapyType",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/RadiationTherapyType",
  "version" : "2.23.0",
  "name" : "RadiationTherapyType",
  "title" : "Radiation therapy type",
  "status" : "active",
  "date" : "2022-07-15T00:00:00+02:00",
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
  "description" : "Radiation therapy type",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 6,
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
    "code" : "involved_node",
    "display" : "Involved node",
    "definition" : "Involved node"
  },
  {
    "code" : "involved_field",
    "display" : "Involved field",
    "definition" : "Involved field"
  },
  {
    "code" : "extended_field",
    "display" : "Extended field",
    "definition" : "Extended field"
  },
  {
    "code" : "total_body_irradiation",
    "display" : "Total body irradiation",
    "definition" : "Total body irradiation"
  },
  {
    "code" : "coat_field",
    "display" : "Coat field",
    "definition" : "Coat field"
  },
  {
    "code" : "tbi_involed_field",
    "display" : "TBI + Involved field",
    "definition" : "TBI + Involved field"
  }]
}

```
