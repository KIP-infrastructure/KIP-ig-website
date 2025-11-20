# Raymond-Roy occlusion Classification (RROC), incl. modified classification (MRRC) - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Raymond-Roy occlusion Classification (RROC), incl. modified classification (MRRC)**

## CodeSystem: Raymond-Roy occlusion Classification (RROC), incl. modified classification (MRRC) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/RaymondRoyClassification | *Version*:2.14.1 |
| Active as of 2022-06-29 | *Computable Name*:RaymondRoyClassification |

 
Raymond-Roy occlusion Classification (RROC), incl. modified classification (MRRC); Link: https://radiopaedia.org/articles/raymondroy-occlusion-classification-of-intracranial-aneurysms-1 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ModifiedRaymondRoyKlassification](ValueSet-ModifiedRaymondRoyKlassification.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "RaymondRoyClassification",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/RaymondRoyClassification",
  "version" : "2.14.1",
  "name" : "RaymondRoyClassification",
  "title" : "Raymond-Roy occlusion Classification (RROC), incl. modified classification (MRRC)",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Raymond-Roy occlusion Classification (RROC), incl. modified classification (MRRC); Link: https://radiopaedia.org/articles/raymondroy-occlusion-classification-of-intracranial-aneurysms-1",
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "classi",
      "display" : "Class I",
      "definition" : "Class I: Complete obliteration"
    },
    {
      "code" : "classii",
      "display" : "Class II",
      "definition" : "Class II: Residual neck"
    },
    {
      "code" : "classiii",
      "display" : "Class III",
      "definition" : "Class III: residual aneurysm (only in RROC)",
      "concept" : [
        {
          "code" : "classiiia",
          "display" : "Class IIIa",
          "definition" : "Class IIIa: Contrast opacification within the coil interstices of a residual aneurysm (only in MRRC)"
        },
        {
          "code" : "classiiib",
          "display" : "Class IIIb",
          "definition" : "Class IIIb: contrast opacification outside the coil interstices, along the residual aneurysm wall (only in MRRC)"
        }
      ]
    }
  ]
}

```
