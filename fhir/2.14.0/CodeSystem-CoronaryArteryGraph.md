# KAG risk assesment - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **KAG risk assesment**

## CodeSystem: KAG risk assesment 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/CoronaryArteryGraph | *Version*:2.14.0 |
| Active as of 2022-05-31 | *Computable Name*:CoronaryArteryGraph |

 
Should the patient get a KAG 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CoronaryArteryGraph](ValueSet-CoronaryArteryGraph.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "CoronaryArteryGraph",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/CoronaryArteryGraph",
  "version" : "2.14.0",
  "name" : "CoronaryArteryGraph",
  "title" : "KAG risk assesment",
  "status" : "active",
  "date" : "2022-05-31T00:00:00+02:00",
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
  "description" : "Should the patient get a KAG",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
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
    }
  ]
}

```
