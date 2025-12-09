# Kellgren-Lawrence Klassifikation - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kellgren-Lawrence Klassifikation**

## CodeSystem: Kellgren-Lawrence Klassifikation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/KellgrenLawrenceKlassifikation | *Version*:2.17.1 |
| Active as of 2023-12-19 | *Computable Name*:KellgrenLawrenceKlassifikation |

 
Kellgren-Lawrence Klassifikation 

 This Code system is referenced in the content logical definition of the following value sets: 

* [KellgrenLawsonKlassifikation](ValueSet-KellgrenLawsonKlassifikation.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "KellgrenLawrenceKlassifikation",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/KellgrenLawrenceKlassifikation",
  "version" : "2.17.1",
  "name" : "KellgrenLawrenceKlassifikation",
  "title" : "Kellgren-Lawrence Klassifikation",
  "status" : "active",
  "date" : "2023-12-19T00:00:00+02:00",
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
  "description" : "Kellgren-Lawrence Klassifikation",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "tvivlsom",
      "display" : "Tvivlsom (normal ledspalte)",
      "definition" : "Tvivlsom (normal ledspalte)"
    },
    {
      "code" : "mild",
      "display" : "Mild (osteofyt dannelse, normal ledspalte)",
      "definition" : "Mild (osteofyt dannelse, normal ledspalte)"
    },
    {
      "code" : "moderat",
      "display" : "Moderat (reduktion af ledspalte)",
      "definition" : "Moderat (reduktion af ledspalte)"
    },
    {
      "code" : "svaer",
      "display" : "Svær (markant reduktion af ledspalte)",
      "definition" : "Svær (markant reduktion af ledspalte)"
    }
  ]
}

```
