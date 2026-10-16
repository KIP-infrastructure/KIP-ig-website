# DHD eksklusionskriterie - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DHD eksklusionskriterie**

## ValueSet: DHD eksklusionskriterie 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DHDeksklusionskriterie | *Version*:2.27.0 |
| Active as of 2022-06-22 | *Computable Name*:DHDeksklusionskriterie |

 
Patienten skal ikke indberettes til DHD, fordi patienten opfylder et af følgende eksklusionskriterier 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "DHDeksklusionskriterie",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DHDeksklusionskriterie",
  "version" : "2.27.0",
  "name" : "DHDeksklusionskriterie",
  "title" : "DHD eksklusionskriterie",
  "status" : "active",
  "date" : "2022-06-22T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Patienten skal ikke indberettes til DHD, fordi patienten opfylder et af følgende eksklusionskriterier",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/DHDeksklusionskriterie",
      "concept" : [{
        "code" : "DHDA1",
        "display" : "A1: Patienten har tidligere kendt og korrekt diagnosticeret og behandlet hjertesvigt"
      },
      {
        "code" : "DHDA2",
        "display" : "A2: Patienter med akut myokardieinfarkt (AMI) med nedsat ejection fraction (EF/LVEF), hvor AMI er A-diagnosen"
      },
      {
        "code" : "DHDA3",
        "display" : "A3: Patienten har ikke korrigerbar strukturel hjertesygdom og deraf følgende hjertesvigt"
      },
      {
        "code" : "DHDA4",
        "display" : "A4: Primær årsag til hjertesvigt er hjerteklapsygdom og deraf følgende hjertesvigt"
      },
      {
        "code" : "DHDA5",
        "display" : "A5: Primær årsag til hjertesvigt er hurtig hjerteryme (ofte atrieflimren) (kræver kardiologisk vurdering)"
      },
      {
        "code" : "DHDA6",
        "display" : "A6: Patienten har cor pulmunale"
      },
      {
        "code" : "DHDA7",
        "display" : "A7: Patienten har isoleret højresidig hjertesvigt"
      },
      {
        "code" : "DHDA8",
        "display" : "A8: Patienten har gået hos privatpraktiserende speciallæge i kardiologi og er blevet diagnosticeret og behandlet hos denne"
      },
      {
        "code" : "DHDA9",
        "display" : "A9: A-diagnose er ikke hjertesvigt"
      },
      {
        "code" : "DHDA10",
        "display" : "A10: Patientforløb flyttet i KIP til behandlingsansvarlig afd"
      }]
    }]
  }
}

```
