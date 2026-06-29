# Person relation; relation to another person - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Person relation; relation to another person**

## CodeSystem: Person relation; relation to another person 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/PersonFamilyRelation | *Version*:2.23.1 |
| Active as of 2022-06-07 | *Computable Name*:PersonFamilyRelation |

 
Person relation; relation to another person 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "PersonFamilyRelation",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/PersonFamilyRelation",
  "version" : "2.23.1",
  "name" : "PersonFamilyRelation",
  "title" : "Person relation; relation to another person",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "Person relation; relation to another person",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 3,
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
    "code" : "person_family",
    "display" : "Person in the family",
    "definition" : "Person in the family / SNOMED-CT: 303071001"
  },
  {
    "code" : "non_family_member",
    "display" : "Non-family member",
    "definition" : "Non-family member / SNOMED-CT: 394863008"
  },
  {
    "code" : "twin_sibling",
    "display" : "Twin sibling",
    "definition" : "Twin sibling / SNODMED-CT: 11286003"
  }]
}

```
