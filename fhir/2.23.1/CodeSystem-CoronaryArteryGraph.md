# KAG risk assesment - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **KAG risk assesment**

## CodeSystem: KAG risk assesment 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/CoronaryArteryGraph | *Version*:2.23.1 |
| Active as of 2022-05-31 | *Computable Name*:CoronaryArteryGraphCS |

 
Should the patient get a KAG 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CoronaryArteryGraph](ValueSet-CoronaryArteryGraph.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "CoronaryArteryGraph",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/CoronaryArteryGraph",
  "version" : "2.23.1",
  "name" : "CoronaryArteryGraphCS",
  "title" : "KAG risk assesment",
  "status" : "active",
  "date" : "2022-05-31T00:00:00+02:00",
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
  "description" : "Should the patient get a KAG",
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
    "code" : "coronary_artery_graph_instant_KAG",
    "display" : "Instant KAG",
    "definition" : "Do a KAG Instantantly"
  },
  {
    "code" : "coronary_artery_graph_high_risk",
    "display" : "High risk KAG",
    "definition" : "Do a KAG within 24 hours"
  },
  {
    "code" : "coronary_artery_graph_low_risk",
    "display" : "Low risk KAG",
    "definition" : "Selectiv strategy"
  },
  {
    "code" : "coronary_artery_graph_unknown_risk",
    "display" : "No risk assesment",
    "definition" : "Assment that KAG isnt relevent"
  }]
}

```
