# Modified treatment in cerebral ischemia (mTICI) score - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Modified treatment in cerebral ischemia (mTICI) score**

## CodeSystem: Modified treatment in cerebral ischemia (mTICI) score 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MTICIClassification | *Version*:2.17.1 |
| Active as of 2022-06-28 | *Computable Name*:MTICIClassification |

 
Modified treatment in cerebral ischemia (mTICI) score; Link: https://radiopaedia.org/articles/modified-treatment-in-cerebral-ischaemia-mtici-score 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MTICIReperfusionsgrad](ValueSet-MTICIReperfusionsgrad.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MTICIClassification",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MTICIClassification",
  "version" : "2.17.1",
  "name" : "MTICIClassification",
  "title" : "Modified treatment in cerebral ischemia (mTICI) score",
  "status" : "active",
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "Modified treatment in cerebral ischemia (mTICI) score; Link: https://radiopaedia.org/articles/modified-treatment-in-cerebral-ischaemia-mtici-score",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 7,
  "concept" : [
    {
      "code" : "grade0",
      "display" : "Grade 0",
      "definition" : "Grade 0: No perfusion"
    },
    {
      "code" : "grade1",
      "display" : "Grade 1",
      "definition" : "Grade 1: Antegrade reperfusion past the initial occlusion, but limited distal branch filling with little or slow distal reperfusion"
    },
    {
      "code" : "grade2",
      "display" : "Grade 2",
      "definition" : "Grade 2",
      "concept" : [
        {
          "code" : "grade2a",
          "display" : "Grade 2a",
          "definition" : "Grade 2a: Antegrade reperfusion of less than half of the occluded target artery previously ischemic territory (e.g. in one major division of the middle cerebral artery (MCA) and its territory)"
        },
        {
          "code" : "grade2b",
          "display" : "Grade 2b",
          "definition" : "Grade 2b: Antegrade reperfusion of more than half of the previously occluded target artery ischemic territory (e.g. in two major divisions of the MCA and their territories)"
        },
        {
          "code" : "grade2c",
          "display" : "Grade 2c",
          "definition" : "Grade 2c: Near complete perfusion except for slow flow or distal emboli in a few distal cortical vessels"
        }
      ]
    },
    {
      "code" : "grade3",
      "display" : "Grade 3",
      "definition" : "Grade 3: Complete antegrade reperfusion of the previously occluded target artery ischemic territory, with absence of visualized occlusion in all distal branches"
    }
  ]
}

```
