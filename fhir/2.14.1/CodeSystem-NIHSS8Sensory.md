# The National Institute of Health Stroke Scale (NIHSS) - 8. Sensory - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **The National Institute of Health Stroke Scale (NIHSS) - 8. Sensory**

## CodeSystem: The National Institute of Health Stroke Scale (NIHSS) - 8. Sensory 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/NIHSS8Sensory | *Version*:2.14.1 |
| Active as of 2022-06-23 | *Computable Name*:NIHSS8Sensory |

 
The National Institute of Health Stroke Scale (NIHSS) - 8. Sensory; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information 

 This Code system is referenced in the content logical definition of the following value sets: 

* [NIHSS8Sensibilitet](ValueSet-NIHSS8Sensibilitet.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "NIHSS8Sensory",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS8Sensory",
  "version" : "2.14.1",
  "name" : "NIHSS8Sensory",
  "title" : "The National Institute of Health Stroke Scale (NIHSS) - 8. Sensory",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 8. Sensory; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "0",
      "display" : "0",
      "definition" : "Normal; no sensory loss."
    },
    {
      "code" : "1",
      "display" : "1",
      "definition" : "Mild-to-moderate sensory loss; patient feels pinprick is less sharp or is dull on the affected side; or there is a loss of superficial pain with pinprick, but patient is aware of being touched."
    },
    {
      "code" : "2",
      "display" : "2",
      "definition" : "Severe to total sensory loss; patient is not aware of being touched in the face, arm, and leg."
    }
  ]
}

```
