# The National Institute of Health Stroke Scale (NIHSS) - 11. Extinction and Inattention (formerly Neglect) - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **The National Institute of Health Stroke Scale (NIHSS) - 11. Extinction and Inattention (formerly Neglect)**

## CodeSystem: The National Institute of Health Stroke Scale (NIHSS) - 11. Extinction and Inattention (formerly Neglect) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/NIHSS11ExtinctionInattention | *Version*:2.14.0 |
| Active as of 2022-06-23 | *Computable Name*:NIHSS11ExtinctionInattention |

 
The National Institute of Health Stroke Scale (NIHSS) - 11. Extinction and Inattention (formerly Neglect); Link: https://www.ninds.nih.gov/stroke-scales-and-related-information 

 This Code system is referenced in the content logical definition of the following value sets: 

* [NIHSS11EkstinktionInattention](ValueSet-NIHSS11EkstinktionInattention.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "NIHSS11ExtinctionInattention",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS11ExtinctionInattention",
  "version" : "2.14.0",
  "name" : "NIHSS11ExtinctionInattention",
  "title" : "The National Institute of Health Stroke Scale (NIHSS) - 11. Extinction and Inattention (formerly Neglect)",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 11. Extinction and Inattention (formerly Neglect); Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "0",
      "display" : "0",
      "definition" : "No abnormality."
    },
    {
      "code" : "1",
      "display" : "1",
      "definition" : "Visual, tactile, auditory, spatial, or personal inattention or extinction to bilateral simultaneous stimulation in one of the sensory modalities."
    },
    {
      "code" : "2",
      "display" : "2",
      "definition" : "Profound hemi-inattention or extinction to more than one modality; does not recognize own hand or orients to only one side of space."
    }
  ]
}

```
