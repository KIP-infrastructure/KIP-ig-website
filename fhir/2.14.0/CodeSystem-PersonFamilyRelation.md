# Person relation; relation to another person - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Person relation; relation to another person**

## CodeSystem: Person relation; relation to another person 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/PersonFamilyRelation | *Version*:2.14.0 |
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
  "version" : "2.14.0",
  "name" : "PersonFamilyRelation",
  "title" : "Person relation; relation to another person",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "Person relation; relation to another person",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
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
    }
  ]
}

```
