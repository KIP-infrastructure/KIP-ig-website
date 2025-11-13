# The National Institute of Health Stroke Scale (NIHSS) - 7. Limb Ataxia - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **The National Institute of Health Stroke Scale (NIHSS) - 7. Limb Ataxia**

## CodeSystem: The National Institute of Health Stroke Scale (NIHSS) - 7. Limb Ataxia 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/NIHSS7LimbAtaxia | *Version*:2.14.0 |
| Active as of 2022-06-23 | *Computable Name*:NIHSS7LimbAtaxia |

 
The National Institute of Health Stroke Scale (NIHSS) - 7. Limb Ataxia; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information 

 This Code system is referenced in the content logical definition of the following value sets: 

* [NIHSS7Ataksi](ValueSet-NIHSS7Ataksi.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "NIHSS7LimbAtaxia",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS7LimbAtaxia",
  "version" : "2.14.0",
  "name" : "NIHSS7LimbAtaxia",
  "title" : "The National Institute of Health Stroke Scale (NIHSS) - 7. Limb Ataxia",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 7. Limb Ataxia; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "0",
      "display" : "0",
      "definition" : "Absent."
    },
    {
      "code" : "1",
      "display" : "1",
      "definition" : "Present in one limb."
    },
    {
      "code" : "2",
      "display" : "2",
      "definition" : "Present in two limbs."
    },
    {
      "code" : "UN",
      "display" : "UN",
      "definition" : "Amputation or joint fusion, explain:"
    }
  ]
}

```
