# The National Institute of Health Stroke Scale (NIHSS) - 2. Best Gaze - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **The National Institute of Health Stroke Scale (NIHSS) - 2. Best Gaze**

## CodeSystem: The National Institute of Health Stroke Scale (NIHSS) - 2. Best Gaze 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/NIHSS2Gaze | *Version*:2.13.0 |
| Active as of 2022-06-23 | *Computable Name*:NIHSS2Gaze |

 
The National Institute of Health Stroke Scale (NIHSS) - 2. Best Gaze; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information 

 This Code system is referenced in the content logical definition of the following value sets: 

* [NIHSS2Blik](ValueSet-NIHSS2Blik.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "NIHSS2Gaze",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS2Gaze",
  "version" : "2.13.0",
  "name" : "NIHSS2Gaze",
  "title" : "The National Institute of Health Stroke Scale (NIHSS) - 2. Best Gaze",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 2. Best Gaze; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "0",
      "display" : "0",
      "definition" : "Normal."
    },
    {
      "code" : "1",
      "display" : "1",
      "definition" : "Partial gaze palsy; gaze is abnormal in one or both eyes, but forced deviation or total gaze paresis is not present."
    },
    {
      "code" : "2",
      "display" : "2",
      "definition" : "Forced deviation, or total gaze paresis not overcome by the oculocephalic maneuver."
    }
  ]
}

```
