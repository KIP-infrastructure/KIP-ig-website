# The National Institute of Health Stroke Scale (NIHSS) - 5. Motor Arm - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **The National Institute of Health Stroke Scale (NIHSS) - 5. Motor Arm**

## CodeSystem: The National Institute of Health Stroke Scale (NIHSS) - 5. Motor Arm 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/NIHSS5MotorArm | *Version*:2.16.0 |
| Active as of 2022-06-23 | *Computable Name*:NIHSS5MotorArm |

 
The National Institute of Health Stroke Scale (NIHSS) - 5. Motor Arm; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information 

 This Code system is referenced in the content logical definition of the following value sets: 

* [NIHSS5FunktionArm](ValueSet-NIHSS5FunktionArm.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "NIHSS5MotorArm",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS5MotorArm",
  "version" : "2.16.0",
  "name" : "NIHSS5MotorArm",
  "title" : "The National Institute of Health Stroke Scale (NIHSS) - 5. Motor Arm",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 5. Motor Arm; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
  "content" : "complete",
  "count" : 8,
  "concept" : [
    {
      "code" : "0",
      "display" : "0",
      "definition" : "No drift; limb holds 90 (or 45) degrees for full 10 seconds."
    },
    {
      "code" : "1",
      "display" : "1",
      "definition" : "Drift; limb holds 90 (or 45) degrees, but drifts down before full 10 seconds; does not hit bed or other support."
    },
    {
      "code" : "2",
      "display" : "2",
      "definition" : "Some effort against gravity; limb cannot get to or maintain (if cued) 90 (or 45) degrees, drifts down to bed, but has some effort against gravity."
    },
    {
      "code" : "3",
      "display" : "3",
      "definition" : "No effort against gravity; limb falls."
    },
    {
      "code" : "4",
      "display" : "4",
      "definition" : "No movement."
    },
    {
      "code" : "5a",
      "display" : "5a",
      "definition" : "Left Arm"
    },
    {
      "code" : "5b",
      "display" : "5b",
      "definition" : "Right Arm"
    },
    {
      "code" : "UN",
      "display" : "UN",
      "definition" : "Amputation or joint fusion, explain:"
    }
  ]
}

```
