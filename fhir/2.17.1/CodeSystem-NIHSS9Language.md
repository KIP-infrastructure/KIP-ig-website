# The National Institute of Health Stroke Scale (NIHSS) - 9. Best Language - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **The National Institute of Health Stroke Scale (NIHSS) - 9. Best Language**

## CodeSystem: The National Institute of Health Stroke Scale (NIHSS) - 9. Best Language 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/NIHSS9Language | *Version*:2.17.1 |
| Active as of 2022-06-23 | *Computable Name*:NIHSS9Language |

 
The National Institute of Health Stroke Scale (NIHSS) - 9. Best Language; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information 

 This Code system is referenced in the content logical definition of the following value sets: 

* [NIHSS9Sprog](ValueSet-NIHSS9Sprog.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "NIHSS9Language",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS9Language",
  "version" : "2.17.1",
  "name" : "NIHSS9Language",
  "title" : "The National Institute of Health Stroke Scale (NIHSS) - 9. Best Language",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 9. Best Language; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "0",
      "display" : "0",
      "definition" : "No aphasia; normal."
    },
    {
      "code" : "1",
      "display" : "1",
      "definition" : "Mild-to-moderate aphasia; some obvious loss of fluency or facility of comprehension, without significant limitation on ideas expressed or form of expression. Reduction of speech and/or comprehension, however, makes conversation about provided materials difficult or impossible. For example, in conversation about provided materials, examiner can identify picture or naming card content from patient's response."
    },
    {
      "code" : "2",
      "display" : "2",
      "definition" : "Severe aphasia; all communication is through fragmentary expression; great need for inference, questioning, and guessing by the listener. Range of information that can be exchanged is limited; listener carries burden of communication. Examiner cannot identify materials provided from patient response."
    },
    {
      "code" : "3",
      "display" : "3",
      "definition" : "Mute, global aphasia; no usable speech or auditory comprehension."
    }
  ]
}

```
