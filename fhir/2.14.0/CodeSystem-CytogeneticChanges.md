# Cytogenetic changes - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cytogenetic changes**

## CodeSystem: Cytogenetic changes 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/CytogeneticChanges | *Version*:2.14.0 |
| Active as of 2022-07-13 | *Computable Name*:CytogeneticChanges |

 
Cytogenetic changes 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CytogeneticChanges](ValueSet-CytogeneticChanges.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "CytogeneticChanges",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/CytogeneticChanges",
  "version" : "2.14.0",
  "name" : "CytogeneticChanges",
  "title" : "Cytogenetic changes",
  "status" : "active",
  "date" : "2022-07-13T00:00:00+02:00",
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
  "description" : "Cytogenetic changes",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "hyperdiploidy",
      "display" : "Hyperdiploidy",
      "definition" : "hyperdiploidi / hyperdiploidi / SNOMED-CT: 55597007"
    },
    {
      "code" : "hypodiploidy",
      "display" : "Hypoploidy",
      "definition" : "Hypoploidy / hypodiploidi / SNOMED-CT: 15486006"
    },
    {
      "code" : "pseudodiploidy",
      "display" : "Pseudodiploidy",
      "definition" : "Pseudodiploidy / Pseudodiploidi"
    }
  ]
}

```
