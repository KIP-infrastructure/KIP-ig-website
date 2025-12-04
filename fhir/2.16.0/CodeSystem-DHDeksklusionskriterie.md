# DHD eksklusionskriterier - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DHD eksklusionskriterier**

## CodeSystem: DHD eksklusionskriterier 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/DHDeksklusionskriterie | *Version*:2.16.0 |
| Active as of 2022-06-22 | *Computable Name*:DHDeksklusionskriterie |

 
Patienten skal ikke indberettes til DHD, fordi patienten opfylder et af følgende eksklusionskriterier. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DHDeksklusionskriterie](ValueSet-DHDeksklusionskriterie.md)

This code system `https://kip.rkkp.dk/fhir/CodeSystem/DHDeksklusionskriterie` provides **a fragment** that includes following codes:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "DHDeksklusionskriterie",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/DHDeksklusionskriterie",
  "version" : "2.16.0",
  "name" : "DHDeksklusionskriterie",
  "title" : "DHD eksklusionskriterier",
  "status" : "active",
  "date" : "2022-06-22T00:00:00+02:00",
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
  "description" : "Patienten skal ikke indberettes til DHD, fordi patienten opfylder et af følgende eksklusionskriterier.",
  "content" : "fragment",
  "count" : 10,
  "concept" : [
    {
      "code" : "DHDA1",
      "display" : "A1",
      "definition" : "A1: Patienten har tidligere kendt og korrekt diagnosticeret og behandlet hjertesvigt"
    },
    {
      "code" : "DHDA2",
      "display" : "A2",
      "definition" : "A2: Patienter med akut myokardieinfarkt (AMI) med nedsat ejection fraction (EF/LVEF), hvor AMI er A-diagnosen"
    },
    {
      "code" : "DHDA3",
      "display" : "A3",
      "definition" : "A3: Patienten har ikke korrigerbar strukturel hjertesygdom og deraf følgende hjertesvigt"
    },
    {
      "code" : "DHDA4",
      "display" : "A4",
      "definition" : "A4: Primær årsag til hjertesvigt er hjerteklapsygdom og deraf følgende hjertesvigt"
    },
    {
      "code" : "DHDA5",
      "display" : "A5",
      "definition" : "A5: Primær årsag til hjertesvigt er hurtig hjerteryme (ofte atrieflimren) (kræver kardiologisk vurdering)"
    },
    {
      "code" : "DHDA6",
      "display" : "A6",
      "definition" : "A6: Patienten har cor pulmunale"
    },
    {
      "code" : "DHDA7",
      "display" : "A7",
      "definition" : "A7: Patienten har isoleret højresidig hjertesvigt"
    },
    {
      "code" : "DHDA8",
      "display" : "A8",
      "definition" : "A8: Patienten har gået hos privatpraktiserende speciallæge i kardiologi og er blevet diagnosticeret og behandlet hos denne"
    },
    {
      "code" : "DHDA9",
      "display" : "A9",
      "definition" : "A9: A-diagnose er ikke hjertesvigt"
    },
    {
      "code" : "DHDA10",
      "display" : "A10",
      "definition" : "A10: Patientforløb flyttet i KIP til behandlingsansvarlig afd"
    }
  ]
}

```
