# Vancouver classification of periprosthetic hip fractures - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Vancouver classification of periprosthetic hip fractures**

## CodeSystem: Vancouver classification of periprosthetic hip fractures 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/VancouverClassification | *Version*:2.14.2 |
| Active as of 2022-11-07 | *Computable Name*:VancouverClassification |

 
Vancouver classification of periprosthetic hip fractures; Link: https://radiopaedia.org/articles/vancouver-classification-of-periprosthetic-hip-fractures 

 This Code system is referenced in the content logical definition of the following value sets: 

* [VancouverKlassifikationDHR](ValueSet-VancouverKlassifikationDHR.md)
* [VancouverKlassifikationPeroperativDHR](ValueSet-VancouverKlassifikationPeroperativDHR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "VancouverClassification",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/VancouverClassification",
  "version" : "2.14.2",
  "name" : "VancouverClassification",
  "title" : "Vancouver classification of periprosthetic hip fractures",
  "status" : "active",
  "date" : "2022-11-07T00:00:00+02:00",
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
  "description" : "Vancouver classification of periprosthetic hip fractures; Link: https://radiopaedia.org/articles/vancouver-classification-of-periprosthetic-hip-fractures",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 11,
  "concept" : [
    {
      "code" : "type_a",
      "display" : "Type A: fractures involve the trochanteric area",
      "definition" : "Type A: fractures involve the trochanteric area",
      "concept" : [
        {
          "code" : "type_ag",
          "display" : "Type A(G): greater trochanter",
          "definition" : "Type A(G): greater trochanter"
        },
        {
          "code" : "type_al",
          "display" : "Type A(L): lesser trochanter",
          "definition" : "Type A(L): lesser trochanter"
        }
      ]
    },
    {
      "code" : "type_b",
      "display" : "Type B: around the stem or just below it",
      "definition" : "Type B: around the stem or just below it",
      "concept" : [
        {
          "code" : "type_b1",
          "display" : "Type B1: stem stable",
          "definition" : "Type B1: stem stable"
        },
        {
          "code" : "type_b2",
          "display" : "Type B2: stem loose",
          "definition" : "Type B2: stem loose"
        },
        {
          "code" : "type_b3",
          "display" : "Type B3: stem loose, bone stock inadequate",
          "definition" : "Type B3: stem loose, bone stock inadequate"
        }
      ]
    },
    {
      "code" : "type_c",
      "display" : "Type C: well below the stem",
      "definition" : "Type C: well below the stem",
      "concept" : [
        {
          "code" : "type_c1",
          "display" : "Type C1",
          "definition" : "Type C1"
        },
        {
          "code" : "type_c2",
          "display" : "Type C2",
          "definition" : "Type C2"
        },
        {
          "code" : "type_c3",
          "display" : "Type C3",
          "definition" : "Type C3"
        }
      ]
    }
  ]
}

```
