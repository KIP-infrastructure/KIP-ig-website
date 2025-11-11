# NYHA klasser - hjertesvigt - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NYHA klasser - hjertesvigt**

## CodeSystem: NYHA klasser - hjertesvigt 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/NYHA | *Version*:2.13.0 |
| Active as of 2022-07-21 | *Computable Name*:NYHA |

 
The New York Heart Association (NYHA) Functional Classification link:https://www.heart.org/en/health-topics/heart-failure/what-is-heart-failure/classes-of-heart-failure 

 This Code system is referenced in the content logical definition of the following value sets: 

* [NYHA](ValueSet-NYHA.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "NYHA",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/NYHA",
  "version" : "2.13.0",
  "name" : "NYHA",
  "title" : "NYHA klasser - hjertesvigt",
  "status" : "active",
  "date" : "2022-07-21T00:00:00+02:00",
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
  "description" : "The New York Heart Association (NYHA) Functional Classification link:https://www.heart.org/en/health-topics/heart-failure/what-is-heart-failure/classes-of-heart-failure",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "NYHAI",
      "display" : "NYHAI",
      "definition" : "No limitation of physical activity. Ordinary physical activity does not cause undue fatigue, palpitation, dyspnea (shortness of breath)."
    },
    {
      "code" : "NYHAII",
      "display" : "NYHAII",
      "definition" : "Slight limitation of physical activity. Comfortable at rest. Ordinary physical activity results in fatigue, palpitation, dyspnea (shortness of breath)."
    },
    {
      "code" : "NYHAIII",
      "display" : "NYHAIII",
      "definition" : "Marked limitation of physical activity. Comfortable at rest. Less than ordinary activity causes fatigue, palpitation, or dyspnea."
    },
    {
      "code" : "NYHAIV",
      "display" : "NYHAIV",
      "definition" : "Unable to carry on any physical activity without discomfort. Symptoms of heart failure at rest. If any physical activity is undertaken, discomfort increases."
    }
  ]
}

```
