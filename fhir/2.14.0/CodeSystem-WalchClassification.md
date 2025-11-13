# Walch classification - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Walch classification**

## CodeSystem: Walch classification 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/WalchClassification | *Version*:2.14.0 |
| Active as of 2022-10-06 | *Computable Name*:WalchClassification |

 
Walch classification; Link: https://radiopaedia.org/articles/walch-classification-of-glenoid-morphology-1 

 This Code system is referenced in the content logical definition of the following value sets: 

* [WalchKlassifikationDSR](ValueSet-WalchKlassifikationDSR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "WalchClassification",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/WalchClassification",
  "version" : "2.14.0",
  "name" : "WalchClassification",
  "title" : "Walch classification",
  "status" : "active",
  "date" : "2022-10-06T00:00:00+02:00",
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
  "description" : "Walch classification; Link: https://radiopaedia.org/articles/walch-classification-of-glenoid-morphology-1",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 11,
  "concept" : [
    {
      "code" : "type_a",
      "display" : "Type A",
      "definition" : "Type A: centered humeral head, concentric wear, no subluxation of the humeral head",
      "concept" : [
        {
          "code" : "type_a1",
          "display" : "Type A1",
          "definition" : "Type A1: minor central erosion"
        },
        {
          "code" : "type_a2",
          "display" : "Type A2",
          "definition" : "Type A2: major central erosion, humeral head protruding into the glenoid cavity"
        }
      ]
    },
    {
      "code" : "type_b",
      "display" : "Type B",
      "definition" : "Type B: humeral head subluxated posteriorly, biconcave glenoid with asymmetric wear",
      "concept" : [
        {
          "code" : "type_b1",
          "display" : "Type B1",
          "definition" : "Type B1: narrowing of the posterior joint space, subchondral sclerosis, osteophytes"
        },
        {
          "code" : "type_b2",
          "display" : "Type B2",
          "definition" : "Type B2: biconcave aspect of the glenoid with posterior rim erosion and retroverted glenoid"
        },
        {
          "code" : "type_b3",
          "display" : "Type B3",
          "definition" : "Type B3: monoconcave and posterior wear with >15° retroversion or >70% posterior humeral head subluxation, or both"
        }
      ]
    },
    {
      "code" : "type_c",
      "display" : "Type C",
      "definition" : "Type C: Dysplastic glenoid with at least 25° of retroversion not caused by erosion",
      "concept" : [
        {
          "code" : "type_c1",
          "display" : "Type C1",
          "definition" : "Type C1: dysplastic glenoid with >25° retroversion regardless of the erosion"
        },
        {
          "code" : "type_c2",
          "display" : "Type C2",
          "definition" : "Type C2: biconcave, posterior bone loss, posterior translation of the humeral head"
        }
      ]
    },
    {
      "code" : "type_d",
      "display" : "Type D",
      "definition" : "Type D: glenoid anteversion or anterior humeral head subluxation <40°"
    }
  ]
}

```
