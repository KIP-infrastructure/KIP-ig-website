# The National Institute of Health Stroke Scale (NIHSS) - 4. Facial Palsy - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **The National Institute of Health Stroke Scale (NIHSS) - 4. Facial Palsy**

## CodeSystem: The National Institute of Health Stroke Scale (NIHSS) - 4. Facial Palsy 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/NIHSS4FacialPalsy | *Version*:2.14.0 |
| Active as of 2022-06-23 | *Computable Name*:NIHSS4FacialPalsy |

 
The National Institute of Health Stroke Scale (NIHSS) - 4. Facial Palsy; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information 

 This Code system is referenced in the content logical definition of the following value sets: 

* [NIHSS4Facialisparese](ValueSet-NIHSS4Facialisparese.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "NIHSS4FacialPalsy",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS4FacialPalsy",
  "version" : "2.14.0",
  "name" : "NIHSS4FacialPalsy",
  "title" : "The National Institute of Health Stroke Scale (NIHSS) - 4. Facial Palsy",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 4. Facial Palsy; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "0",
      "display" : "0",
      "definition" : "Normal symmetrical movements."
    },
    {
      "code" : "1",
      "display" : "1",
      "definition" : "Minor paralysis (flattened nasolabial fold, asymmetry on smiling)."
    },
    {
      "code" : "2",
      "display" : "2",
      "definition" : "Partial paralysis (total or near-total paralysis of lower face)."
    },
    {
      "code" : "3",
      "display" : "3",
      "definition" : "Complete paralysis of one or both sides (absence of facial movement in the upper and lower face)."
    }
  ]
}

```
